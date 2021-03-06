import { Component, OnInit } from '@angular/core';
import { ChartsModule } from 'ng2-charts';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';

@Component({
  selector: 'app-dash',
  templateUrl: './dash.component.html',
  styleUrls: ['./dash.component.css']
})
export class DashComponent implements OnInit {

	public datos:any = [];
	public select:string;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService
	) { }

	ngOnInit(){
		this.today();
	}

	public today(){
		// this.select = 'today';
		// this.apiService.getAll('dash/today').subscribe(datos => {
  //          this.datos = datos;
  //       }, error => {this.alertService.error(error); });
	}

}
