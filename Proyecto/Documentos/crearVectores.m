function [ x, y] = crearVectores(x,posx,y,posy)
%UNTITLED Summary of this function goes here
%   Detailed explanation goes here
%% se calcula la diferencia de tamaños
tamx=size(x,2);
tamy=size(y,2);
% se agrega ceros a la derecha
limx = abs(tamx-posx);
limy = abs(tamy-posy);

if limx == max(limx,limy)
    tamaumento=limx-limy;
    aumento = zeros(1,tamaumento);
    y = horzcat(y,aumento);
elseif limy == max(limx,limy)
    tamaumento=limy-limx;
    aumento = zeros(1,tamaumento);
    x = horzcat(x,aumento);
else
    %no hagas nada
end

% se agrega ceros a la izquierda
minx = abs(posx-1);
miny = abs(posy-1);

if minx == max(minx,miny)
    tamaumento=minx-miny;
    aumento = zeros(1,tamaumento);
    posy=posy+tamaumento;
    y = horzcat(aumento,y);
elseif miny == max(minx,miny)
    tamaumento=miny-minx;
    aumento = zeros(1,tamaumento);
    posx=posx+tamaumento;
    x = horzcat(aumento,x);
else
    %no hagas nada
end

%% Armado de la matriz
tamx=size(x,2);
tamy=size(y,2);

%Se calcula el vector de posiciones
xpi = -posx+1:1:0;
xpd = 1:1:tamx-posx;
mposx=horzcat(xpi,xpd);

ypi = -posy+1:1:0;
ypd = 1:1:tamy-posy;
mposy=horzcat(ypi,ypd);

% Se concatenan las matrices para tener valores de referencia
x = vertcat(x,mposx)
y = vertcat(y,mposy)

end

