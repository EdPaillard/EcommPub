import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { environment } from 'src/environments/environment';

@Component({
    selector:'orders',
    templateUrl:'./order-list.component.html',
})
export class OrderListComponent implements OnInit {

    constructor(private http: HttpClient) {};

    route: string = environment.API_URL+"/api/orders";

    ngOnInit(): void {
        this.http.get(this.route, {
            headers: {"Authorization": `Bearer ${sessionStorage.getItem('token')}`}
        }).subscribe(res => { 
            this.order = res;
        })
    }

    title: string = "Order";
    order: any;
}