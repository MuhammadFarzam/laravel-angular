import { ThrowStmt } from '@angular/compiler';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class TokenService {

  private iss:any = {
     login: "http://127.0.0.1:8000/api/login",
     signup: "http://127.0.0.1:8000/api/signup",
  }

  constructor() { }

  handle(token){
    this.setToken(token);
    console.log(this.loggedIn());
  }

  setToken(token){
    localStorage.setItem('token',token)
  }

  getToken(){
     return localStorage.getItem('token');
  }

  removeToken(){
    localStorage.removeItem('token');
  }

  isValidToken(){
    const token = this.getToken();
    if(token){
      const payload = this.getPayloadFromToken(token);
      if(payload){
        return (Object.values(this.iss).indexOf(payload.iss)) > -1 ?  true : false;
      }
    }
    return false;
  }

  getPayloadFromToken(token){
     const payload = token.split('.')[1];
     return this.decodePayload(payload);

  }

  decodePayload(payload){
    return JSON.parse(atob(payload));
  }

  loggedIn(){
    return this.isValidToken();
  }
}
