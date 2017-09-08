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
        $__internal_003ae09f77b9d5b5cc521c517e1adcd4ff34486bf093ef7cece5845877212208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003ae09f77b9d5b5cc521c517e1adcd4ff34486bf093ef7cece5845877212208->enter($__internal_003ae09f77b9d5b5cc521c517e1adcd4ff34486bf093ef7cece5845877212208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e3ca81dc1984aac60fec2fc4c09a7811accaf28e6760af4fb60a85b7bde93e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ca81dc1984aac60fec2fc4c09a7811accaf28e6760af4fb60a85b7bde93e6e->enter($__internal_e3ca81dc1984aac60fec2fc4c09a7811accaf28e6760af4fb60a85b7bde93e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_003ae09f77b9d5b5cc521c517e1adcd4ff34486bf093ef7cece5845877212208->leave($__internal_003ae09f77b9d5b5cc521c517e1adcd4ff34486bf093ef7cece5845877212208_prof);

        
        $__internal_e3ca81dc1984aac60fec2fc4c09a7811accaf28e6760af4fb60a85b7bde93e6e->leave($__internal_e3ca81dc1984aac60fec2fc4c09a7811accaf28e6760af4fb60a85b7bde93e6e_prof);

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
