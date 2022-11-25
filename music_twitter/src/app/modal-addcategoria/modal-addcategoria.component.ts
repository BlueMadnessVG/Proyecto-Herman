import { Component, OnInit } from '@angular/core';
import { Form, FormBuilder, FormGroup, RequiredValidator, Validators } from '@angular/forms';
import { ReactiveFormsModule } from '@angular/forms';
import Swal from 'sweetalert2';
import { AdminService } from '../servicios/admin.service';
@Component({
  selector: 'app-modal-addcategoria',
  templateUrl: './modal-addcategoria.component.html',
  styleUrls: ['./modal-addcategoria.component.css']
})
export class ModalAddcategoriaComponent implements OnInit {
  frmaddcat!:FormGroup
  constructor(private fb:FormBuilder,private Admservice:AdminService) { }

  agregarcat(){
    if(this.frmaddcat.valid)
    this.submit();
    Swal.fire('ERROR','POR FAVOR LLENE EL FORMULARIO CORRECTAMENTE E INTENTELO DE NUEVO','error');
  }


  submit(){
    this.Admservice.agregarcat({
      nombre:this.frmaddcat.controls['nombre'].value,
  }).subscribe((x)=>
  {Swal.fire('Enhorabuena', 'Categoría agregada correctamente', 'success')
  },
  ((error)=>
  Swal.fire('ERROR', error.data, 'error'
  )

  ));

  }

  ngOnInit(): void {
    this.initform();
  }

  initform(){
    this.frmaddcat=this.fb.group({
      nombre:['',Validators.required]
  });
  }

}
