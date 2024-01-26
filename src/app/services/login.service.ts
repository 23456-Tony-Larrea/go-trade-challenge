import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { API_BASE_URL, LOGIN_ENDPOINT } from '../constants/api-contanst';

@Injectable({
  providedIn: 'root'
})
export class LoginService {
  constructor(private http: HttpClient) {}
  login(email: string, password: string,getToken:boolean): Observable<any> {
    const loginUrl = `${API_BASE_URL}${LOGIN_ENDPOINT}`;
    const credentials = { email, password,getToken };
    return this.http.post(loginUrl, credentials);
  }
}
