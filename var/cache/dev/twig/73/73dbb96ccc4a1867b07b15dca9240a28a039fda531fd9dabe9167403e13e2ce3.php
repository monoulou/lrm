<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_5bb57f2b6bba5d757075591ceba26746875ef5b6887ceecece2caee8a268f67d extends Twig_Template
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
        $__internal_6a7965b92b2442e70af62f17a7706fa48c93ccf389d03e8051e4a3220cd476e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7965b92b2442e70af62f17a7706fa48c93ccf389d03e8051e4a3220cd476e4->enter($__internal_6a7965b92b2442e70af62f17a7706fa48c93ccf389d03e8051e4a3220cd476e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_13a5b53a280067ab68f7eeacf70b03d9f56e639ba1a9c0b144e0cddb75f47d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a5b53a280067ab68f7eeacf70b03d9f56e639ba1a9c0b144e0cddb75f47d62->enter($__internal_13a5b53a280067ab68f7eeacf70b03d9f56e639ba1a9c0b144e0cddb75f47d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6a7965b92b2442e70af62f17a7706fa48c93ccf389d03e8051e4a3220cd476e4->leave($__internal_6a7965b92b2442e70af62f17a7706fa48c93ccf389d03e8051e4a3220cd476e4_prof);

        
        $__internal_13a5b53a280067ab68f7eeacf70b03d9f56e639ba1a9c0b144e0cddb75f47d62->leave($__internal_13a5b53a280067ab68f7eeacf70b03d9f56e639ba1a9c0b144e0cddb75f47d62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
