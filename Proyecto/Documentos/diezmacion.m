function [diezmar]=diezmacion(serie,valor)

[~,tam] = size(serie);
temp = serie;

for i=1:1:tam
 auxpos= serie(2,i)*valor;
 resp = find(serie(2,:)==auxpos);
 if(isempty(resp)==1)
 serie(1,i)=0;
 else
 serie(1,i)=temp(1,resp);    
 end
end
diezmar = serie;
end
