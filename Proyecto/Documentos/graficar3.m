function graficar3(x,y,h,operacion)
%UNTITLED4 Summary of this function goes here
%   Detailed explanation goes here

axis auto normal
grid on
subplot(3,1,1); stem(x(2,:),x(1,:),'cs');
title('Serie x(n)');
xlabel('Posiciones')
ylabel('Valores')
subplot(3,1,2); stem(y(2,:),y(1,:),'go');
title('Serie y(n)');
xlabel('Posiciones')
ylabel('Valores')
subplot(3,1,3); stem(h(2,:),h(1,:),'bs');
title("Resultado "+operacion+" h(n)");
xlabel('Posiciones')
ylabel('Valores')
end

