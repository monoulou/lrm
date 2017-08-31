<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d318a6d3a25ad5611b7949c4a5c97d06d9e5ca197281cf1d3295c6661bfbf177 extends Twig_Template
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
        $__internal_be4780f9861bcb41ecb51a2dc3e4be2afcc9250228c5e981869cb05c7d33b9ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4780f9861bcb41ecb51a2dc3e4be2afcc9250228c5e981869cb05c7d33b9ba->enter($__internal_be4780f9861bcb41ecb51a2dc3e4be2afcc9250228c5e981869cb05c7d33b9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_caa2258736874f52c758f52b1c74142cefc431c35e739f837f16821dd9429c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa2258736874f52c758f52b1c74142cefc431c35e739f837f16821dd9429c86->enter($__internal_caa2258736874f52c758f52b1c74142cefc431c35e739f837f16821dd9429c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_be4780f9861bcb41ecb51a2dc3e4be2afcc9250228c5e981869cb05c7d33b9ba->leave($__internal_be4780f9861bcb41ecb51a2dc3e4be2afcc9250228c5e981869cb05c7d33b9ba_prof);

        
        $__internal_caa2258736874f52c758f52b1c74142cefc431c35e739f837f16821dd9429c86->leave($__internal_caa2258736874f52c758f52b1c74142cefc431c35e739f837f16821dd9429c86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
