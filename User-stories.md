# USER STORIES FITNESS\_PLUS


**SENDO** um usuário do sistema

**POSSO** calcular o meu IMC

**PARA QUE** eu entenda em qual  perfil eu me enquadro 

**Cenário 1: Informações preenchidas corretamente**

Dado que a medida usada no site é metros e quilogramas E minha altura é 1.7 metros E meu peso é 80 kg 

Quando informo minha altura 1.7 metros e meu peso em 80 kg  

Então o cálculo é feito

E é exibido na tela a mensagem você está  acima do peso: 27.68

**Cenário  2: Informações preenchidas incorretamente**

Dado que a medida usada no site é metros e quilogramas E minha altura é 1.7 metros E meu peso é 80 kg 

Quando informo minha altura em 1.7 metros e meu peso em 176.37 libras

Então o cálculo é feito considerando que o peso está preenchido em kg

E é exibido na tela a mensagem você está obeso: 61.03

<br>

**SENDO** um usuário do sistema

**POSSO** calcular a minha TMB

**PARA QUE** eu consiga montar minha alimentação corretamente

**Cenário 1: Informações preenchidas corretamente**

Dado que a medida usada no site é metros e quilogramas E o cálculo varia de acordo com o sexo E minha altura é 1.7 metros E meu peso é 80 kg E sou do sexo masculino E tenho 80 anos

Quando informo minha altura 1.70, meu peso 80 kg, meu sexo como masculino e minha idade 80 anos

Então o cálculo é feito

E é exibido na tela a mensagem seu metabolismo basal é: 714.12

**Cenário 2: Informações preenchidas incorretamente**

Dado que a medida usada no site é metros e quilogramas E o cálculo varia de acordo com o sexo E minha altura é 1.7 metros E meu peso é 80 kg E sou do sexo masculino E tenho 80 anos

Quando informo minha altura 1.70, meu peso 80 kg, meu sexo como feminino e minha idade 80 anos

Então o cálculo é feito

E é exibido na tela a mensagem seu metabolismo basal é: 846.22

<br>

**SENDO** um usuário do sistema

**POSSO** calcular a minha FC ideal para emagrecer

**PARA QUE** eu aprenda sobre esse assunto

**Cenário 1: Informações preenchidas corretamente**

Dado que  a idade e o sexo mudam o resultado do cálculo E eu  tenho 80 anos E sou homem

Quando informo que minha idade é 80 anos e meu sexo é masculino

Então é feito o cálculo

E é exibido na tela a mensagem fc mínima ideal: 172.00 fc máxima ideal: 160.00

**Cenário 2:  Informações preenchidas incorretamente**

Dado que a idade e o sexo mudam o resultado  do cálculo E eu tenho 80 anos E sou homem

Quando informo que minha idade é 80 anos e meu sexo é feminino

Então é feito o cálculo

E é exibido na tela a mensagem fc mínima ideal: 178.00 fc máxima ideal: 166.00

<br>

**SENDO** um usuário do sistema

**POSSO** fazer um cadastro no site

**PARA QUE** o site obtenha meus dados e forneça informações baseadas neles

**Cenário 1: Cadastro bem sucedido**

Dado que o site pede obrigatoriamente o e-mail, altura, peso, idade, sexo, nome de  usuário e   senha para realizar o cadastro E eu informo meus dados corretamente.

Quando eu peço para me cadastrar

Então é feito o cadastro

E é exibido na tela a mensagem Cadastro concluído, será enviado um link de confirmação no seu e-mail

**Cenário 2: Cadastro mal sucedido(e-mail já utilizado)**

Dado que o site pede obrigatoriamente o e-mail, altura, peso, idade, sexo, nome de usuário e senha para realizar o cadastro E não é permitido e-mails ja utilizados no site E eu tento utilizar um e-mail que ja cadastrei no site

Quando eu  peço para me cadastrar

Então o cadastro não é feito

E é exibido na tela a mensagem Não é possível completar o cadastro e-mail já utilizado

**Cenário 3: Cadastro mal sucedido(e-mail invalido)**

Dado que o site pede obrigatoriamente o e-mail, altura, peso, idade, sexo, nome de usuário e senha para realizar o cadastro E e-mails invalidos não são aceitos E eu digito um email que não existe

Quando eu peço para me cadastrar

Então o cadastro não é feito

E é exibido na tela a mensagem Não é possível completar o cadastro e-mail invalido

**Cenário 4: Cadastro mal sucedido(nome de usuário já existente)**

Dado que o site pede obrigatoriamente o e-mail, altura, peso, idade, sexo, nome de usuário e senha para realizar o cadastro E nomes de usuários não podem ser iguais E eu digito um nome de usuário já existente

Quando peço para me cadastrar	

Então o cadastro não é feito

E é exibido na tela a mensagem Não é possível realizar o cadastro nome de usuário já existente

<br>

**SENDO** usuário do sistema

**POSSO** ter acesso a informações sobre alimentação

**PARA QUE** eu entenda como me alimentar corretamente.

<br>

**SENDO** usuário do sistema

**POSSO** ter acesso a informações sobre exercícios

**PARA QUE** eu entenda como me exercitar corretamente.