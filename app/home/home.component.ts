import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormGroup,FormControl} from '@angular/forms';
import  { Router} from '@angular/router';



@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

	updateForm  = new FormGroup({ rollno: new FormControl(''), name: new FormControl(''),});

  constructor(private http:HttpClient,private router:Router) { }

  emps:any=[];
  msg:any;
  
  ngOnInit(): void {
  	this.getData();
  }

   	getData(){
	  	this.http.get("/api/index",{}).subscribe(res=>{
	  		this.emps = res["emp"];
	  	},
	  	err=>{
	  		console.log(err.error.error);
	  	});
   }

   

   //Function Redirect Page.
  root_page(pageName:String):void{this.router.navigate([`${pageName}`]);}

  
  //Function for Save Data.
  destroy(j){
    this.http.delete("/api/destroy/"+j).subscribe(response=>{
    	this.getData();
    },err=>{
      console.log(err.error.error);
    });
}
}
