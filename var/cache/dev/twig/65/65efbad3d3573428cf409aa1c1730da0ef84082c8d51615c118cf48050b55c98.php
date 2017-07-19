<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_21546c9e5c52d93a4d6a73de7f066c02553282fe97d2f628f9d8deb5b1e1d7e6 extends Twig_Template
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
        $__internal_cefd2e1284f3901e2b8246796662c2f01ef437a1e784b8ca1ed7208b4e287429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cefd2e1284f3901e2b8246796662c2f01ef437a1e784b8ca1ed7208b4e287429->enter($__internal_cefd2e1284f3901e2b8246796662c2f01ef437a1e784b8ca1ed7208b4e287429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_2e82e6f1513d0542b2bca2303608142041d7fc9f12489d6f765b2f8130b2ceba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e82e6f1513d0542b2bca2303608142041d7fc9f12489d6f765b2f8130b2ceba->enter($__internal_2e82e6f1513d0542b2bca2303608142041d7fc9f12489d6f765b2f8130b2ceba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cefd2e1284f3901e2b8246796662c2f01ef437a1e784b8ca1ed7208b4e287429->leave($__internal_cefd2e1284f3901e2b8246796662c2f01ef437a1e784b8ca1ed7208b4e287429_prof);

        
        $__internal_2e82e6f1513d0542b2bca2303608142041d7fc9f12489d6f765b2f8130b2ceba->leave($__internal_2e82e6f1513d0542b2bca2303608142041d7fc9f12489d6f765b2f8130b2ceba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
