import { Component, OnInit, Input, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../../services/alert.service';
import { ApiService } from '../../../../../services/api.service';


@Component({
  selector: 'app-equipo-empresas',
  templateUrl: './equipo-empresas.component.html'
})
export class EquipoEmpresasComponent implements OnInit {

    @Input() equipo:any = {};
    public empresas:any = [];
    public proyecto:any = {};
    public proyectos:any = [];
    public accion:any = {};
    public id;
    public loading:boolean = false;
    
    modalRef: BsModalRef;

	constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router, private modalService: BsModalService
        ) { }

	ngOnInit() {
        this.id = +this.route.snapshot.paramMap.get('id');
        this.load();
	}

    load(){
        this.apiService.read('asesor/empresas/', this.id).subscribe(empresas => {
            this.empresas = empresas;
        });
    }

    public openModal(template: TemplateRef<any>, proyecto:any) {
        this.proyecto = proyecto;
        if(!this.proyecto.id){
            this.proyecto.empresa = [];
        }
        this.accion = {};
        this.accion.fin = this.apiService.date();
        this.accion.responsable = 'Asesor';
        this.modalRef = this.modalService.show(template);           
    }
    public selectEmpresa(event){
        console.log(event);
        this.proyecto.empresa = event.empresa;
        this.proyecto.empresa_id = event.empresa.id;
    }
    public onSubmit(){
        this.loading = true;
        this.proyecto.asesor_id = this.apiService.auth_user().id;
        this.apiService.store('empresa/proyecto', this.proyecto).subscribe(proyecto => {
            this.loading = false;
            this.proyecto.asesor = this.apiService.auth_user();
            this.alertService.success('Guardado');
            if (!this.proyecto.id) {
                this.proyecto.id = proyecto.id;
                this.empresas.push(this.proyecto);   
            }

            this.modalRef.hide();
            this.proyecto = {};
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public eliminar(proyecto:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('empresa/proyecto/', proyecto.id) .subscribe(data => {
                for (let i = 0; i < this.empresas.length; i++) { 
                    if (this.empresas[i].id == data.id )
                        this.empresas.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }
    
    //Proyectos - Acciones *******************************************************

    public saveAccion(accion:any){
        accion.proyecto_id = this.proyecto.id;
        this.loading = true;
        this.apiService.store('accion', accion).subscribe(data => {
            if(!this.accion.id)
                this.proyecto.acciones.push(data);
            this.accion = {};
            this.load();
            this.loading = false;
            this.alertService.success('Guardado');
        }, error => {this.alertService.error(error); this.loading = false;});
    }

    public compleated(accion:any){
        accion.completado = !accion.completado;
        this.apiService.store('accion', accion).subscribe(data => {
            this.accion = data;
            this.load();
            this.alertService.success('Guardado');
        }, error => {this.alertService.error(error); this.loading = false;});
        
    }

    public deleteAccion(accion:any){
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('accion/', accion.id) .subscribe(accion => {
                for (let i = 0; i < this.proyecto.acciones.length; i++) { 
                    if (this.proyecto.acciones[i].id == accion.id ){
                        this.proyecto.acciones.splice(i, 1);
                        this.load();
                       
                    }
                }
            }, error => {this.alertService.error(error); });
                   
        }
    }
    public editAccion(accion:any){
        this.accion = accion;
        this.alertService.success('Guardado');
    }

}
