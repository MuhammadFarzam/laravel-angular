import { HttpClient} from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ApproutingService } from 'src/app/services/approuting.service';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {

  public form1 = {
    name: null,
    email:null,
    password:null,
    password_confirmation:null
  }

  public error:any = [];
  constructor(private approuting: ApproutingService, private route: Router) { }

  ngOnInit(): void {
  }

  signupSubmit(){
    this.approuting.signup(this.form1).subscribe(
      data => console.log(data),
      err => this.errorHandling(err)
    );
  }

  errorHandling(err: any){
      this.error = err.error.errors;
  }
}
