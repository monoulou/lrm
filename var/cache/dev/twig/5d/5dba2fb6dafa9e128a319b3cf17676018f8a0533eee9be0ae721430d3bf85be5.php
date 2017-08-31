<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0fa7299dbc9164ca468d661308edb55d71e8ebc55c3ae81aeb3dfb65bc368b5b extends Twig_Template
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
        $__internal_58c46ad90ec107215328865790751726e3d7ed448b3003bf15a936355d8de1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c46ad90ec107215328865790751726e3d7ed448b3003bf15a936355d8de1c8->enter($__internal_58c46ad90ec107215328865790751726e3d7ed448b3003bf15a936355d8de1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_eb407b8df9e9ae99a30e285c871981789e8c8962159362a0a3deab1f107eae75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb407b8df9e9ae99a30e285c871981789e8c8962159362a0a3deab1f107eae75->enter($__internal_eb407b8df9e9ae99a30e285c871981789e8c8962159362a0a3deab1f107eae75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_58c46ad90ec107215328865790751726e3d7ed448b3003bf15a936355d8de1c8->leave($__internal_58c46ad90ec107215328865790751726e3d7ed448b3003bf15a936355d8de1c8_prof);

        
        $__internal_eb407b8df9e9ae99a30e285c871981789e8c8962159362a0a3deab1f107eae75->leave($__internal_eb407b8df9e9ae99a30e285c871981789e8c8962159362a0a3deab1f107eae75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
