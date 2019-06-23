import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment'
import { url } from 'inspector';
@Injectable({
  providedIn: 'root'
})
export class ServicesService {

  constructor( private httpClient: HttpClient,) { }
  get(url:string){
    this.httpClient.get(environment.API_URL + url );
  }
}
