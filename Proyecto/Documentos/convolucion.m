function [resultado]=convolucion( x,y )
%UNTITLED Summary of this function goes here
%   Detailed explanation goes here

[~,tamx]=size(x);
[~,tamy]=size(y);
minx=x(2,1);
miny=y(2,1);
maxx=x(1,tamx);
maxy=y(1,tamy);

nfinal=maxx+maxy+1;
ninicial=minx+miny;

tamh = tamx+tamy;

h=[];
    for i=1:1:tamy
        if i==1
        aux = x(1,:).*y(1,1);
        cero=zeros(1,abs(tamh-size(aux,2))); 
        h =horzcat(aux,cero);
        else
        aux = x(1,:).*y(1,i);
        ceroi=zeros(1,i-1); 
        cerod=zeros(1,tamy-i+1);
        aux=horzcat(ceroi,aux);
        aux=horzcat(aux,cerod);
        h=vertcat(h,aux);
        end
    end
    h1=sum(h,1)
    h2=ninicial:1:nfinal+1
    resultado=vertcat(h1,h2);

end

