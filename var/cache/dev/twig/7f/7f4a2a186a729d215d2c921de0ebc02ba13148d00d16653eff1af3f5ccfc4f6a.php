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
        $__internal_1645336bf099a7117f52a781f45c2bf1aa34010122a6664d6fbcb918506d7111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1645336bf099a7117f52a781f45c2bf1aa34010122a6664d6fbcb918506d7111->enter($__internal_1645336bf099a7117f52a781f45c2bf1aa34010122a6664d6fbcb918506d7111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_336ee53a4fe86e645883f0ff09ea7cc9c2bec2a3e5f137c68dcaad98fd723d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336ee53a4fe86e645883f0ff09ea7cc9c2bec2a3e5f137c68dcaad98fd723d15->enter($__internal_336ee53a4fe86e645883f0ff09ea7cc9c2bec2a3e5f137c68dcaad98fd723d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1645336bf099a7117f52a781f45c2bf1aa34010122a6664d6fbcb918506d7111->leave($__internal_1645336bf099a7117f52a781f45c2bf1aa34010122a6664d6fbcb918506d7111_prof);

        
        $__internal_336ee53a4fe86e645883f0ff09ea7cc9c2bec2a3e5f137c68dcaad98fd723d15->leave($__internal_336ee53a4fe86e645883f0ff09ea7cc9c2bec2a3e5f137c68dcaad98fd723d15_prof);

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
