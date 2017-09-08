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
        $__internal_2447635b617f38ed2e81fe4b91b76f025d0ee59ca32756fcdcd49d371ef0ce5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2447635b617f38ed2e81fe4b91b76f025d0ee59ca32756fcdcd49d371ef0ce5f->enter($__internal_2447635b617f38ed2e81fe4b91b76f025d0ee59ca32756fcdcd49d371ef0ce5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8c32a5ba52d8cf58ac2e0955268427557ef1de778c22ba6686a87722105177cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c32a5ba52d8cf58ac2e0955268427557ef1de778c22ba6686a87722105177cd->enter($__internal_8c32a5ba52d8cf58ac2e0955268427557ef1de778c22ba6686a87722105177cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2447635b617f38ed2e81fe4b91b76f025d0ee59ca32756fcdcd49d371ef0ce5f->leave($__internal_2447635b617f38ed2e81fe4b91b76f025d0ee59ca32756fcdcd49d371ef0ce5f_prof);

        
        $__internal_8c32a5ba52d8cf58ac2e0955268427557ef1de778c22ba6686a87722105177cd->leave($__internal_8c32a5ba52d8cf58ac2e0955268427557ef1de778c22ba6686a87722105177cd_prof);

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
