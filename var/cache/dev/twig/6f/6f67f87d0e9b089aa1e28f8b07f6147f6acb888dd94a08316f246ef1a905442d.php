<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_38bd9d6651179f2ce9d9e17cd508c91540274678e1c74648cbe7c7711bd846fc extends Twig_Template
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
        $__internal_0504a371777c4d9f96395958cfeedc129370035946125b99bc3ea23041f229f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0504a371777c4d9f96395958cfeedc129370035946125b99bc3ea23041f229f2->enter($__internal_0504a371777c4d9f96395958cfeedc129370035946125b99bc3ea23041f229f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4aee2dc0566599dadbbeed6feee9842fe57cdca8f4ffc9679bf3fc628c2c8182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aee2dc0566599dadbbeed6feee9842fe57cdca8f4ffc9679bf3fc628c2c8182->enter($__internal_4aee2dc0566599dadbbeed6feee9842fe57cdca8f4ffc9679bf3fc628c2c8182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0504a371777c4d9f96395958cfeedc129370035946125b99bc3ea23041f229f2->leave($__internal_0504a371777c4d9f96395958cfeedc129370035946125b99bc3ea23041f229f2_prof);

        
        $__internal_4aee2dc0566599dadbbeed6feee9842fe57cdca8f4ffc9679bf3fc628c2c8182->leave($__internal_4aee2dc0566599dadbbeed6feee9842fe57cdca8f4ffc9679bf3fc628c2c8182_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
