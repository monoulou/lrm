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
        $__internal_87cf0c66272389cb3eefb9c1d9f11943be81adb7242490fd8f3c6d0cda109287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87cf0c66272389cb3eefb9c1d9f11943be81adb7242490fd8f3c6d0cda109287->enter($__internal_87cf0c66272389cb3eefb9c1d9f11943be81adb7242490fd8f3c6d0cda109287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_579f1de1c78c118d90a253bc0689b11726bcfc7dedc543c768527f3d54e58e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579f1de1c78c118d90a253bc0689b11726bcfc7dedc543c768527f3d54e58e95->enter($__internal_579f1de1c78c118d90a253bc0689b11726bcfc7dedc543c768527f3d54e58e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_87cf0c66272389cb3eefb9c1d9f11943be81adb7242490fd8f3c6d0cda109287->leave($__internal_87cf0c66272389cb3eefb9c1d9f11943be81adb7242490fd8f3c6d0cda109287_prof);

        
        $__internal_579f1de1c78c118d90a253bc0689b11726bcfc7dedc543c768527f3d54e58e95->leave($__internal_579f1de1c78c118d90a253bc0689b11726bcfc7dedc543c768527f3d54e58e95_prof);

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
