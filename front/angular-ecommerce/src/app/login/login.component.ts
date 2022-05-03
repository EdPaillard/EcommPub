import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';
import { environment } from 'src/environments/environment';

@Component({
  selector: 'login',
  templateUrl: './login.component.html',
})
export class LoginComponent {
  title = 'LOGIN';

  constructor(private http: HttpClient) {};

  onClick(login:string, password:String, email:String){
    let route = environment.API_URL+"/api/login";
    let postData = {
      "login": login,
      "password": password,
      "email": email
    }
    this.http.post(route, postData).toPromise().then((data:any) => {
      this.saveData(login, data.token);
    })

  }

  saveData(name:string, token:any) {
    sessionStorage.setItem('name', name);
    sessionStorage.setItem('token', token);
  }
}
