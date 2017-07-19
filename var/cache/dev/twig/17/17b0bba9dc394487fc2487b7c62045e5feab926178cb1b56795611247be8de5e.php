<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_359611da0d94e2daab8b0ea7bb030f01709b4015cb9175762b51facb9353d657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae8c0f6aa2497e07ae05c9e5a9e66dea794f9ed57bf6d7b56a3d3ea86d663628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8c0f6aa2497e07ae05c9e5a9e66dea794f9ed57bf6d7b56a3d3ea86d663628->enter($__internal_ae8c0f6aa2497e07ae05c9e5a9e66dea794f9ed57bf6d7b56a3d3ea86d663628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7ec5b0abfdec0ba93df497974653b1eb6552a3561306e6d277f26000b9c10e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec5b0abfdec0ba93df497974653b1eb6552a3561306e6d277f26000b9c10e9c->enter($__internal_7ec5b0abfdec0ba93df497974653b1eb6552a3561306e6d277f26000b9c10e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ae8c0f6aa2497e07ae05c9e5a9e66dea794f9ed57bf6d7b56a3d3ea86d663628->leave($__internal_ae8c0f6aa2497e07ae05c9e5a9e66dea794f9ed57bf6d7b56a3d3ea86d663628_prof);

        
        $__internal_7ec5b0abfdec0ba93df497974653b1eb6552a3561306e6d277f26000b9c10e9c->leave($__internal_7ec5b0abfdec0ba93df497974653b1eb6552a3561306e6d277f26000b9c10e9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
