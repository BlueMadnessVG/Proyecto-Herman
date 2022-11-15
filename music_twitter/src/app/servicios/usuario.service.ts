import { HttpClient } from "@angular/common/http";
import { Injectable } from "@angular/core";
import { JwtHelperService } from "@auth0/angular-jwt";
import { Observable, Subject, tap } from 'rxjs';
import { LoginModel } from "../modelos/Login.model";
import { EnviarMensajeModel } from "../modelos/EnviarMensaje.model";
import { ObtenerChatModel } from "../modelos/ObtenerChat.model";
import { ObtenerMusicaModel } from "../modelos/ObtenerMusica.model";
import { ObtenerAmigosModel } from "../modelos/ObtenerAmigos.model";

/* Modelos */
import { TUsuario } from "../modelos/TUsuario.model";
import { TAmigos } from "../modelos/TAmigos.model";
import { TMusica } from "../modelos/TMusica.model";
import { ObtenerPlayListModel } from "../modelos/ObtenerPlayList.model";
import { TPlayList } from "../modelos/TPlayList.model";

@Injectable( {

    providedIn: 'root',

})

export class UsrService {

    urlApi: string = 'http://localhost/api/';
    private _refresh$ = new Subject <void> ();
    get refresh() {
        return this._refresh$;
    }

    constructor( private client: HttpClient ) {}

    AmigosUsr(): Observable <TUsuario> {

        return this.client.post<TUsuario>(this.urlApi + '?u=MostrarUsuarios', null).pipe(
            tap(()=> {
                this.refresh.next();
            })
        );

    }

    enviarMensaje( data: EnviarMensajeModel ): Observable < TUsuario > {

      return this.client.post< TUsuario >(
        this.urlApi + '?u=EnviarMensaje',
        JSON.stringify(data),
        { headers: { 'Content-Type': 'application/json' } }
      )
      .pipe(
          tap( () => {
            this.refresh.next();
          } )
       );

    }

  /* servicios del chat */
    obtenerChat(data: ObtenerChatModel ): Observable < TUsuario > {

      return this.client.post< TUsuario > (
        this.urlApi + '?u=ObtenerChat',
        JSON.stringify(data),
        { headers: { 'Content-Type': 'application/json' } }
      );

    };

    obtenerAmigos(data: ObtenerAmigosModel): Observable < TAmigos > {

      return this.client.post< TAmigos > (
        this.urlApi + "?u=ObtenerAmigos",
        JSON.stringify(data),
        { headers: { 'Content-Type': 'application/json' } }
      )

    };
  /* servicios del chat */

  /* servicios de musica */

    obtenerMusica(data: ObtenerMusicaModel): Observable < TMusica > {

      return this.client.post< TMusica > (
        this.urlApi + "?u=obtenerMusicaPlayList",
        JSON.stringify(data),
        { headers: { 'Content-Type': 'application/json' } }
      )

    }

    obtenerPlayList( data: ObtenerPlayListModel ): Observable < TPlayList > {

      return this.client.post< TPlayList > (
        this.urlApi + "?u=obtenerUsuarioPlayList ",
        JSON.stringify(data),
        { headers: { 'Content-Type': 'application/json' } }
      )

    }

  /* servicios de musica */

    //Servicio para Login , Regresa un Token
    login(data: LoginModel): Observable<TUsuario> {

      return this.client.post<TUsuario>(
        this.urlApi + '?u=Login',
        JSON.stringify(data),
        { headers: { 'Content-Type': 'application/json' } }
      );
    }

    saveToken(data: any) {
      localStorage.setItem('token', data);
      const helper = new JwtHelperService();
      localStorage.setItem('data', JSON.stringify(helper.decodeToken(data)));
    }

    cambiopwd(data:any):Observable<TUsuario>{
      return this.client.post<TUsuario>(
        this.urlApi+'?u=ModificarPWD',JSON.stringify(data)
      );
    }


}
