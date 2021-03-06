import { Component, OnInit, TemplateRef, Input } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../../services/alert.service';
import { ApiService } from '../../../../../services/api.service';

@Component({
  selector: 'app-actividad-aplicaciones',
  templateUrl: './actividad-aplicaciones.component.html'
})
export class ActividadAplicacionesComponent implements OnInit {

    @Input() actividad:any = {};
	public aplicacion:any = {};

    public loading:boolean = false;
    modalRef: BsModalRef;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router, private modalService: BsModalService
    ) {
        
     }

	ngOnInit() {
       
	}
    public openModalAplicacion(template: TemplateRef<any>, aplicacion:any) {
        this.aplicacion = aplicacion;
        this.modalRef = this.modalService.show(template);
        
    }
    public setEstado(aplicacion:any, estado:string){
        aplicacion.estado = estado;
        this.apiService.store('actividad/aplicacion', aplicacion).subscribe(aplicacion => { 
            this.alertService.success('Actualizado');
        }, error => {this.alertService.error(error); });
    }

}
