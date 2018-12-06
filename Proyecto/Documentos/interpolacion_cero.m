function secuencia_final=interpolacion_cero(secuencia,N)
    valores=secuencia(1,:);
    valores_finales=[];
    posicion=secuencia(2,:);
    for x=1:size(valores,2)
       valores_finales=horzcat(valores_finales,valores(1,x));
       for y=1:N-1
          valores_finales=horzcat(valores_finales,0); 
       end
    end
    
    negativos=find_zero(posicion);
    negativos=negativos*N*-1;
    posiciones_finales=[];
    
    for x=1:size(valores_finales,2)
       posiciones_finales=horzcat(posiciones_finales,negativos);
       negativos=negativos+1;
    end
    
    secuencia_final=[];
    secuencia_final=horzcat(secuencia_final,valores_finales);
    secuencia_final=vertcat(secuencia_final,posiciones_finales);
end

function tam=find_zero(posiciones)
    tam=0;
    for i=1:size(posiciones,2)
       if(posiciones(1,i)==0)
          break; 
       else
           tam=tam+1;
       end 
    end
end
