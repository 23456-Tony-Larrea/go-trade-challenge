import { Component } from '@angular/core';
import { LoginService } from '../services/login.service';
import { LoginForm } from '../class/login-form';
import { HttpErrorResponse } from '@angular/common/http';
import { AlertController } from '@ionic/angular';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
  loginForm: LoginForm = new LoginForm();

  constructor(
    private loginService: LoginService,
    private alertController: AlertController,
  ) {}

  async presentAlert(header: string, message: string) {
    const alert = await this.alertController.create({
      header: header,
      message: message,
      buttons: ['OK']
    });

    await alert.present();
  }

  onSubmit(): void {
    const { email, password ,getToken} = this.loginForm;
    this.loginService.login(email,password,getToken)
    .subscribe(
      (response) => {
        if (response.status) {
          this.presentAlert('Success', response.message);
          // Aquí puedes manejar la respuesta exitosa, por ejemplo, guardar el token
          localStorage.setItem('surname', response.identity.surname);
          localStorage.setItem('token', response.token);
          
        } else {
          this.presentAlert('Error', response.message);
        }
      },
      (error: HttpErrorResponse) => {
        this.presentAlert('Error', 'Login failed');
      }
    );
  }
}