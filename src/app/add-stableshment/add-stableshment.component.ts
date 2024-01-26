import { Component, OnInit } from '@angular/core';
import { StableshmentService } from '../services/stableshment.service';
import { Establishment } from '../class/stableshment';
import { HttpErrorResponse } from '@angular/common/http';
import { AlertController } from '@ionic/angular';
import { Router } from '@angular/router';


@Component({
  selector: 'app-add-stableshment',
  templateUrl: './add-stableshment.component.html',
  styleUrls: ['./add-stableshment.component.scss'],
})
export class AddStableshmentComponent implements OnInit {
  establishment: Establishment = new Establishment();
  surname:string="";

  constructor(
    private stableshmentService: StableshmentService,
    private alertController: AlertController,
    private router: Router  // inject Router
  ) { }

  ngOnInit() {
    this.surname = localStorage.getItem("surname") ?? '';
  }

  async presentAlert(header: string, message: string) {
    const alert = await this.alertController.create({
      header: header,
      message: message,
      buttons: ['OK']
    });

    await alert.present();
  }

  logout(): void {
    // remove the token from storage
    localStorage.removeItem('token');
    localStorage.removeItem('surname');
    this.router.navigate(['/']);
  }

  onSubmit():void{
    this.stableshmentService.addEstablishment(this.establishment).subscribe(
      (response: any) => {
        this.presentAlert('¡Éxito!', 'Establecimiento agregado correctamente');
      },
      (error: HttpErrorResponse) => {
        this.presentAlert('¡Error!', 'No se pudo agregar el establecimiento');
      }
    );
  }
}