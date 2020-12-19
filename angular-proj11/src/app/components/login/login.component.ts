import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  public form = {
    email: null,
    password: null
  }
  public error:any = null;

  constructor(private http: HttpClient,private route:Router) { }

  loginSubmit(){
    return this.http.post('http://127.0.0.1:8000/api/login',this.form).subscribe(
      data => console.log(data),
      error => this.errorHandling(error)
    );
  }

  errorHandling(error){
      this.error = error.error.error;
  }

  ngOnInit(): void {
  }

}
