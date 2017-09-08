<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c71e011ab152bc77de56294d0edd2a2b4d8dcc8ac64ea7a2fd62363148c24ccc extends Twig_Template
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
        $__internal_3a132af9f7e8018a4197cf0a6e28b237abed3b4ef93bdb7056caa06c261bbc9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a132af9f7e8018a4197cf0a6e28b237abed3b4ef93bdb7056caa06c261bbc9e->enter($__internal_3a132af9f7e8018a4197cf0a6e28b237abed3b4ef93bdb7056caa06c261bbc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_857a9385e2d7464a054eb6cfc152164922a9506d3a177916de31a0d897dd9463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857a9385e2d7464a054eb6cfc152164922a9506d3a177916de31a0d897dd9463->enter($__internal_857a9385e2d7464a054eb6cfc152164922a9506d3a177916de31a0d897dd9463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_3a132af9f7e8018a4197cf0a6e28b237abed3b4ef93bdb7056caa06c261bbc9e->leave($__internal_3a132af9f7e8018a4197cf0a6e28b237abed3b4ef93bdb7056caa06c261bbc9e_prof);

        
        $__internal_857a9385e2d7464a054eb6cfc152164922a9506d3a177916de31a0d897dd9463->leave($__internal_857a9385e2d7464a054eb6cfc152164922a9506d3a177916de31a0d897dd9463_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
