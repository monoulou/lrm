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
        $__internal_98f7973ebd4a46a1f417c8b6c17291d6bc3967ef0718e0b7202e3e0d9a616dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f7973ebd4a46a1f417c8b6c17291d6bc3967ef0718e0b7202e3e0d9a616dc2->enter($__internal_98f7973ebd4a46a1f417c8b6c17291d6bc3967ef0718e0b7202e3e0d9a616dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_43ed06ff5b0a786ac9ecf0ec6884cafb8af6254252d1ffd8e83e20775ef30b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ed06ff5b0a786ac9ecf0ec6884cafb8af6254252d1ffd8e83e20775ef30b17->enter($__internal_43ed06ff5b0a786ac9ecf0ec6884cafb8af6254252d1ffd8e83e20775ef30b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_98f7973ebd4a46a1f417c8b6c17291d6bc3967ef0718e0b7202e3e0d9a616dc2->leave($__internal_98f7973ebd4a46a1f417c8b6c17291d6bc3967ef0718e0b7202e3e0d9a616dc2_prof);

        
        $__internal_43ed06ff5b0a786ac9ecf0ec6884cafb8af6254252d1ffd8e83e20775ef30b17->leave($__internal_43ed06ff5b0a786ac9ecf0ec6884cafb8af6254252d1ffd8e83e20775ef30b17_prof);

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
