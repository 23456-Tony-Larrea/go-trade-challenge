import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Establishment } from '../class/stableshment'; // Asegúrate de que la ruta de importación es correcta
import { API_BASE_URL, STABLESHMENT } from '../constants/api-contanst';

@Injectable({
  providedIn: 'root'
})
export class StableshmentService {
  constructor(private http: HttpClient) {}

  addEstablishment(establishment: Establishment): Observable<any> {
    const url = `${API_BASE_URL}${STABLESHMENT}`;

    // Crear las cabeceras
    const headers = new HttpHeaders({
      'Content-Type': 'application/json',
      'Authorization': `Bearer ${localStorage.getItem('token')}` // Aquí se obtiene el token del almacenamiento local
    });

    return this.http.post(url, establishment, { headers });
  }
}