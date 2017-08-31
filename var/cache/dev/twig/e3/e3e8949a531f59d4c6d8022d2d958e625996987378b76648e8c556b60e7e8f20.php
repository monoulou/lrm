<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e67b04b27d85034815adc5dcbb3d99e0ce258660c19d13aaf99031addd50bd1b extends Twig_Template
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
        $__internal_ecfa31d6d0202af4e431fed97878539b9c5bde9c69038a29544c7cb91bf5af84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecfa31d6d0202af4e431fed97878539b9c5bde9c69038a29544c7cb91bf5af84->enter($__internal_ecfa31d6d0202af4e431fed97878539b9c5bde9c69038a29544c7cb91bf5af84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_dbfba41e8150682e793cf59826f5f4a7d098d364d9d615b0faaa6af2ff312d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfba41e8150682e793cf59826f5f4a7d098d364d9d615b0faaa6af2ff312d29->enter($__internal_dbfba41e8150682e793cf59826f5f4a7d098d364d9d615b0faaa6af2ff312d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ecfa31d6d0202af4e431fed97878539b9c5bde9c69038a29544c7cb91bf5af84->leave($__internal_ecfa31d6d0202af4e431fed97878539b9c5bde9c69038a29544c7cb91bf5af84_prof);

        
        $__internal_dbfba41e8150682e793cf59826f5f4a7d098d364d9d615b0faaa6af2ff312d29->leave($__internal_dbfba41e8150682e793cf59826f5f4a7d098d364d9d615b0faaa6af2ff312d29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
