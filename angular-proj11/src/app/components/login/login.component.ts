import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ApproutingService } from 'src/app/services/approuting.service';
import { TokenService } from 'src/app/services/token.service';


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

  constructor(
    private approuting: ApproutingService,
    private token: TokenService,
    private route: Router,
    ) { }

  loginSubmit(){
    this.approuting.login(this.form).subscribe(
      data => this.handleResponse(data),
      error => this.errorHandling(error)
    );
  }

  handleResponse(data){
     this.token.handle(data.access_token);
     this.route.navigateByUrl('/profile');
  }

  errorHandling(error:any){
      this.error = error.error.error;
      setInterval(()=> {
        this.error = false;
      },5000);
  }

  ngOnInit(): void {
  }

}
