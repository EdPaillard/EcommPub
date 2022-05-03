import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Observable } from 'rxjs';
import { environment } from 'src/environments/environment';

@Component({
    selector: 'product-list',
    templateUrl: './product-list.component.html'
})
export class ProductListComponent implements OnInit {
    constructor(private http: HttpClient) {};

    route: string = environment.API_URL+"/api/products";

    ngOnInit(): void {
        this.http.get(this.route, {
            headers: {"Authorization": `Bearer ${sessionStorage.getItem('token')}`}
        }).subscribe(res => { 
            this.products = res;
            this.filteredProducts = res;
        })
    }

    products: any;
    filteredProducts: any;
    showImage: boolean = false;
    _listFilter: string = "";

    get listFilter(): string {
        return this._listFilter;
    }

    set listFilter(value: string) {
        this._listFilter = value;
        // console.log("In setter:", value);
        this.filteredProducts = this.filter(value);
    }

    filter(filterBy: string): any[] {
        filterBy = filterBy.toLocaleLowerCase();
        return this.products.filter((product: any) =>
        product.name.toLocaleLowerCase().includes(filterBy));
    }

    toggleImage(){
        this.showImage = !this.showImage;
        console.log("test");
        console.log(this.products);
    }

}
