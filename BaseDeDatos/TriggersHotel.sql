-- encargado
delimiter //
create trigger triValidarEncargado
before update
on encargado
for each row
begin
	if new.Nombres_Encargado = null or new.Nombres_Encargado = "" then
		set new.Nombres_Encargado = old.Nombres_Encargado;
	end if;
    
	if new.Apellidos_Encargado = null or new.Apellidos_Encargado = "" then
		set new.Apellidos_Encargado = old.Apellidos_Encargado;
	end if;
    
	if new.Telefono_Encargado = null or new.Telefono_Encargado = "" then
		set new.Telefono_Encargado = old.Telefono_Encargado;
	end if;
    
	if new.Correo_Encargado = null or new.Correo_Encargado = "" then
		set new.Correo_Encargado = old.Correo_Encargado;
	end if;
    
	if new.Contraseña_Encargado = null or new.Contraseña_Encargado = "" then
		set new.Contraseña_Encargado = old.Contraseña_Encargado;
	end if;	
end //
delimiter ;

-- Hotel
delimiter //
create trigger triValidarHotel
before update
on hotel
for each row
begin
	if new.Nombre_Hotel = null or new.Nombre_Hotel = "" then
		set new.Nombre_Hotel = old.Nombre_Hotel;
	end if;
    
	if new.Direccion_Hotel = null or new.Direccion_Hotel = "" then
		set new.Direccion_Hotel = old.Direccion_Hotel;
	end if;
    
	if new.Descripcion_Hotel = null or new.Descripcion_Hotel = "" then
		set new.Descripcion_Hotel = old.Descripcion_Hotel;
	end if;
    
	if new.Imagen_Hotel = null or new.Imagen_Hotel = "" then
		set new.Imagen_Hotel = old.Imagen_Hotel;
	end if;
    end //
delimiter ;

select * from hotel;
select * from encargado;