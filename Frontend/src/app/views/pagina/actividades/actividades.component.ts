import { Component, OnInit } from '@angular/core';
import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-actividades',
  templateUrl: './actividades.component.html'
})
export class ActividadesComponent implements OnInit {

    public actividades:any = [];
    public buscador:any = '';
    public loading = false;

    constructor(private apiService: ApiService, private alertService: AlertService) { }

    ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.loading = true;
        this.apiService.getAll('actividades').subscribe(actividades => { 
            this.actividades = actividades;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false;});
    }

    public delete(actividad: any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('actividad/', actividad.id) .subscribe(data => {
                for (let i = 0; i < this.actividades['data'].length; i++) { 
                    if (this.actividades['data'][i].id == data.id )
                        this.actividades['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });              
        }
    }
    public search(){
        if(this.buscador && this.buscador.length > 2) {
            this.loading = true;
            this.apiService.read('actividades/buscar/', this.buscador).subscribe(actividades => { 
                this.actividades = actividades;
                this.loading = false;
            }, error => {this.alertService.error(error); this.loading = false;});
        }
    }
    public activar(actividad:any){
        actividad.public = !actividad.public;
        this.apiService.store('actividad', actividad).subscribe(actividad => { 
            this.alertService.success('Guardado');
        }, error => {this.alertService.error(error); });
    }
    public setEstado(actividad:any, estado:string){
        actividad.estado = estado;
        this.apiService.store('actividad', actividad).subscribe(actividad => { 
            this.alertService.success('Actualizado');
        }, error => {this.alertService.error(error); });
    }
    public setPagination(event):void{
        this.loading = true;
        this.apiService.paginate(this.actividades.path + '?page='+ event.page).subscribe(actividades => { 
            this.actividades = actividades;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false;});
    }

}

