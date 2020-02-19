# Monitoramento1.0
Monitoramento de Servidores, Host, roteadores etc.

Salvar arquivos em:
  Windows XAMPP
    Pasta htdocs

Para adicionar host editar o arquivo ips.txt

ip:TI02:80:Informatica:Thiago
seguir o padrão: manter ip:NOMEDOHOST:80:SETOR:USUARIO
Obs.: por enquanto nome do HOST não pode ter ponto(.)

Padra mudar nome dos setores ou adicionar/editar

arquivo index.php a partir da linha 86
Exempo:

			imprimeCabecalho('Informatica'); 
			listarDados($c, $array_global, 'Informatica');

Atenção o nome do Setor que esta entre '' deve ser igual ao do arquivo ips.txt.
