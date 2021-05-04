import { Component } from '@angular/core';
import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';
import { Tip } from './tip';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
    constructor(private http: HttpClient) { }

    title = 'Angular - backend, HttpClient'
    author = 'ejc7re, pz4hk'

    types = ['General', 'Stocks', 'Options', 'Cryptocurrency'];

    confirm_msg = '';
    data_submitted = '';

    tipModel = new Tip('', '');

    getFromDB(data:any): void {
        this.data_submitted = data;
        let params = JSON.stringify(data);
        console.log(data);
        this.http.get<void>('http://localhost/cs4640-stock-app/tip_db_get.php?str='+params);
    }

    confirmTip(data: any): void {
        console.log(data);
        this.confirm_msg = 'Thanks for the ' + data.type + ' tip!';
    }

    responsedata = new Tip('', '');
    onSubmit(form: any): void {
        console.log('form submitted ', form);
        this.data_submitted = form;

        let params = JSON.stringify(form);
        console.log(params);
        
        this.http.post<Tip>('http://localhost/cs4640-stock-app/tip_db.php', params)
        .subscribe((response_from_php) => {
            this.responsedata = response_from_php;
        }, (error_in_communication) => {
            console.log('Error: ', error_in_communication);
        })


    }
}
