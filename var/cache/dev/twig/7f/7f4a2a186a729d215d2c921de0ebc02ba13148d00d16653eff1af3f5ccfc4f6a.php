<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_210f872a87acc525e48993c152f4d7ca964ba5babf9bd69e38f946148e440e5a extends Twig_Template
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
        $__internal_135a2c8546c587b434fdeda85cfc58daeb276d88c6aba37821449f07e74214d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135a2c8546c587b434fdeda85cfc58daeb276d88c6aba37821449f07e74214d7->enter($__internal_135a2c8546c587b434fdeda85cfc58daeb276d88c6aba37821449f07e74214d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_759420c6b8da136fafaab7203be9d5b1de7ea90315fb1faa109bb89ef310ab8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759420c6b8da136fafaab7203be9d5b1de7ea90315fb1faa109bb89ef310ab8f->enter($__internal_759420c6b8da136fafaab7203be9d5b1de7ea90315fb1faa109bb89ef310ab8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_135a2c8546c587b434fdeda85cfc58daeb276d88c6aba37821449f07e74214d7->leave($__internal_135a2c8546c587b434fdeda85cfc58daeb276d88c6aba37821449f07e74214d7_prof);

        
        $__internal_759420c6b8da136fafaab7203be9d5b1de7ea90315fb1faa109bb89ef310ab8f->leave($__internal_759420c6b8da136fafaab7203be9d5b1de7ea90315fb1faa109bb89ef310ab8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
