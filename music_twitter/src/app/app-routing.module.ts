import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AppComponent } from './app.component';
import { CambioPwdComponent } from './cambio-pwd/cambio-pwd.component';
import { EditarPerfilComponent } from './editar-perfil/editar-perfil.component';
import { GestionCategoriasComponent } from './gestion-categorias/gestion-categorias.component';
import { GestionPostsComponent } from './gestion-posts/gestion-posts.component';
import { GestionUsuariosComponent } from './gestion-usuarios/gestion-usuarios.component';
import { GuardAdminGuard } from './guardians/guard-admin.guard';
import { GuardLoginGuard } from './guardians/guard-login.guard';
import { AmigosComponent } from './hub-principal/amigos/amigos.component';
import { FeedComponent } from './hub-principal/feed/feed.component';
import { InicioComponent } from './hub-principal/inicio/inicio.component';
import { PlayListComponent } from './hub-principal/play-list/play-list.component';
import { UsuarioInfoComponent } from './hub-principal/usuario-info/usuario-info.component';
import { PagPrincComponent } from './pag-princ/pag-princ.component';

const routes: Routes = [
  {path:'principal',component:PagPrincComponent},
  {path:'', component:InicioComponent,canActivate:[GuardLoginGuard],
    children: [
      {path:'inicio', component : FeedComponent,canActivate:[GuardLoginGuard]},
      {path:'playList', component : PlayListComponent,canActivate:[GuardLoginGuard]},
      {path:'amigos', component : AmigosComponent,canActivate:[GuardLoginGuard]},
      {path:'usuario_info', component: UsuarioInfoComponent, canActivate:[GuardLoginGuard]},
    ],

  },
  {path:'GestionUsuarios',component:GestionUsuariosComponent,canActivate:[GuardAdminGuard]},
  {path:'GestionPosts',component:GestionPostsComponent},
  {path:'GestionCategorias',component:GestionCategoriasComponent,canActivate:[GuardAdminGuard]},
  {path:'CambioPassword',component:CambioPwdComponent,canActivate:[GuardLoginGuard]},
  {path:'editarperfil',component:EditarPerfilComponent,canActivate:[GuardLoginGuard]},


];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
