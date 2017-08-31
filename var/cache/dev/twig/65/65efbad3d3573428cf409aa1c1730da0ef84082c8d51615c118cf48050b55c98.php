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
        $__internal_697b3ace1c8f38d2d01b04c3cd96e078515ac21f85dc581a53b9ab376c36b7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697b3ace1c8f38d2d01b04c3cd96e078515ac21f85dc581a53b9ab376c36b7cc->enter($__internal_697b3ace1c8f38d2d01b04c3cd96e078515ac21f85dc581a53b9ab376c36b7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_fcc270daff906dfdd267226c2cba02d8944a6df9fb8750e35b1876934a088bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc270daff906dfdd267226c2cba02d8944a6df9fb8750e35b1876934a088bf2->enter($__internal_fcc270daff906dfdd267226c2cba02d8944a6df9fb8750e35b1876934a088bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_697b3ace1c8f38d2d01b04c3cd96e078515ac21f85dc581a53b9ab376c36b7cc->leave($__internal_697b3ace1c8f38d2d01b04c3cd96e078515ac21f85dc581a53b9ab376c36b7cc_prof);

        
        $__internal_fcc270daff906dfdd267226c2cba02d8944a6df9fb8750e35b1876934a088bf2->leave($__internal_fcc270daff906dfdd267226c2cba02d8944a6df9fb8750e35b1876934a088bf2_prof);

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
