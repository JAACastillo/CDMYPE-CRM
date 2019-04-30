import { Component, OnInit, EventEmitter, Output, Input } from '@angular/core';
import { Data } from '../../../models/data';

@Component({
  selector: 'app-descargar-excel',
  templateUrl: './descargar-excel.component.html'
})
export class DescargarExcelComponent implements OnInit {

	@Input() nombre:string;

	constructor() { }

	ngOnInit() {}

    public exportar(){
        var tmpElemento = document.createElement('a');
        var data_type = 'data:application/vnd.ms-excel';
        var tabla_div = document.getElementById('tablaReporte');
        var tabla_html = tabla_div.outerHTML.replace(/ /g, '%20');
        tmpElemento.href = data_type + ', ' + tabla_html;
        tmpElemento.download = this.nombre +'.xls';
        tmpElemento.click();
    }


}
