
%Creando la funcion% 
x=0:0.25:3;
y=2*x;

%Creando la serie de fourier%
z=0;
for i=1:1000
    z=z+((1/i).*sin((2/3).*pi.*i*x));
end
serie=3-(6/pi).*z;

plot(x,y);
hold on;
plot(serie);


