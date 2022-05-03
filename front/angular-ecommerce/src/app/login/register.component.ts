import { Component } from '@angular/core';
import { environment } from 'src/environments/environment';

@Component({
  selector: 'register',
  templateUrl: './register.component.html',
})
export class RegisterComponent {
  title = 'REGISTER';
  route = environment.API_URL+"/api/register"
}
