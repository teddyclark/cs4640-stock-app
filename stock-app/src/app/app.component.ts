import { Component } from '@angular/core';
import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';
import { Ticker } from './ticker';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
    constructor(private http: HttpClient) { }

    title = 'Angular - backend, HttpClient'
    author = 'ejc7re and pz4hk'

    // somehow need to pull these from PHP cookie
    tickers = ['placeholders', 'GME', 'BTC'];

    confirm_msg = '';
    data_submitted = '';

    tickerModel = new Ticker('', '', '');

    confirmTicker(data: any): void {
        console.log(data);
        this.confirm_msg = data.name + ', you are currently viewing ' + data.tickername + '!';
    }

    responsedata = new Ticker('', '', '');

    onSubmit(form: any): void {
        console.log('form submitted ', form);
        this.data_submitted = form;

        let params = JSON.stringify(form);
        
        // fix this
        this.http.get<Ticker>('http://localhost/cs4640-stock-app/ticker_db.php?str='+params);

        // fix this too
        this.http.post<Ticker>('http://localhost/cs4640-stock-app/stock-app/src/app/ng-post.php', params)
        .subscribe((response_from_php) => {
            this.responsedata = response_from_php;
        }, (error_in_communication) => {
            console.log('Error');
        })


    }
}
