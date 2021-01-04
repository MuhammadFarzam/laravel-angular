import { HttpClient} from '@angular/common/http';
import { Component, OnInit } from '@angular/core';

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
  constructor(private http:HttpClient) { }

  ngOnInit(): void {
  }

  signupSubmit(){
    console.log('as');
    return this.http.post('http://127.0.0.1:8000/api/signup',this.form1).subscribe(
      data => console.log(data),
      err => this.errorHandling(err)
    );
  }

  errorHandling(err: any){
      this.error = err.error.errors;
  }
}
