<?PHP
// função recursiva - não é sempre usável, somente em situações excepcionais.
$hierarquia = array(
  array(
    'nome_cargo'=>'CEO',
    'subordinados'=>array(
      // inicio diretor comercial
      array(
        'nome_cargo'=>'Diretor Comercial',
        'subordinados'=>array(
          // inicio gerente de vendas
          array(
              'nome_cargo'=>'Gerente de Vendas'
          )
          // termino gerente de vendas
        )
      ),
      // termino diretor Comercial
      // inicio diretor financeiro
      array(
        'nome_cargo'=>'Diretor Financeiro',
        'subordinados'=>array(
          // gerente de contas a pagar
          array(
            'nome_cargo'=>'Gerente de Contas A Pagar',
            'subordinados'=>array(
              //inicio supervisor
              array(
                'nome_cargo'=>'Supervisor de Pagamentos'
              )
              // terminio Supervisor
            )
          ),
          // terminoi gernete de contas a pagar
          //inicio gerente de compras
          array(
            'nome_cargo'=>'Gerente de Compras',
            'subordinados'=>array(
              // inicio supervisor de suprimentos
              array(
                'nome_cargo'=>'Supervisor de Suprimentos'
              )
              // termino supervisor de Suprimentos
            )

          )
          // terminio gerente de compras
        )
      )
      //termino diretor financeiro
    )
  )
);// este exemplo também é conhecido com treeview
//var_dump($hierarquia);
function exibe($cargos){
  $html ='<ul>';
  foreach ($cargos as $cargo){
    $html .="<li>";
    $html .= $cargo['nome_cargo'];
    if (isset($cargo['subordinados']) && count($cargo['subordinados'])>0) {
      $html .=exibe($cargo['subordinados']);
    }
    $html .="</li>";
  }
  $html .='</ul>';
  return $html;
}
echo exibe($hierarquia);
?>
