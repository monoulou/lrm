<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f796b58ed774174638ad552117bf35a6356e1a3ea14e6eddb02cd82e0913bf08 extends Twig_Template
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
        $__internal_69b04952f03041323f6ce8d5ca5e78b50248ae378469154a7b9805a1e5a1d760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b04952f03041323f6ce8d5ca5e78b50248ae378469154a7b9805a1e5a1d760->enter($__internal_69b04952f03041323f6ce8d5ca5e78b50248ae378469154a7b9805a1e5a1d760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_df70e440671f2f7e8e78725430408419022d064161ec7478401faadba8f1f63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df70e440671f2f7e8e78725430408419022d064161ec7478401faadba8f1f63b->enter($__internal_df70e440671f2f7e8e78725430408419022d064161ec7478401faadba8f1f63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_69b04952f03041323f6ce8d5ca5e78b50248ae378469154a7b9805a1e5a1d760->leave($__internal_69b04952f03041323f6ce8d5ca5e78b50248ae378469154a7b9805a1e5a1d760_prof);

        
        $__internal_df70e440671f2f7e8e78725430408419022d064161ec7478401faadba8f1f63b->leave($__internal_df70e440671f2f7e8e78725430408419022d064161ec7478401faadba8f1f63b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
