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
        $__internal_c081ce7ff768bb8a0632eb8eacad89f54c7d1aa7f1a5e6282cdced04bf41b043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c081ce7ff768bb8a0632eb8eacad89f54c7d1aa7f1a5e6282cdced04bf41b043->enter($__internal_c081ce7ff768bb8a0632eb8eacad89f54c7d1aa7f1a5e6282cdced04bf41b043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_71c1a2581d5e5c35f9b1f337625e5059015d02847bca73fd0a9546a2dbd29bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c1a2581d5e5c35f9b1f337625e5059015d02847bca73fd0a9546a2dbd29bc2->enter($__internal_71c1a2581d5e5c35f9b1f337625e5059015d02847bca73fd0a9546a2dbd29bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c081ce7ff768bb8a0632eb8eacad89f54c7d1aa7f1a5e6282cdced04bf41b043->leave($__internal_c081ce7ff768bb8a0632eb8eacad89f54c7d1aa7f1a5e6282cdced04bf41b043_prof);

        
        $__internal_71c1a2581d5e5c35f9b1f337625e5059015d02847bca73fd0a9546a2dbd29bc2->leave($__internal_71c1a2581d5e5c35f9b1f337625e5059015d02847bca73fd0a9546a2dbd29bc2_prof);

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
