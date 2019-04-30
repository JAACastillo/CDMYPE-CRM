import { Component, OnInit } from '@angular/core';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';

declare let $;

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html'
})
export class LoginComponent implements OnInit {

    public user: any = {};
    public loading = false;
    public saludo:string;

    constructor( private apiService: ApiService, private router: Router, private alertService: AlertService) { }

    ngOnInit() {
        var hours = new Date().getHours();

        if(hours >= 12 && hours < 18){
            this.saludo = 'Buenas tardes';
        }
        else if(hours >= 18){
            this.saludo = 'Buenas noches';
        }
        else{
            this.saludo = 'Buenos días';
        }

        this.apiService.logout();
    }

    login() {
        this.loading = true;
        this.apiService.login(this.user)
        .subscribe(
            data => {
                // this.alertService.success("Bienvenido");
                this.router.navigate(['/']);
            },
            error => {
                $('.container').addClass("animated shake");
                this.alertService.error(error);
                this.loading = false;
            });
    }

}
