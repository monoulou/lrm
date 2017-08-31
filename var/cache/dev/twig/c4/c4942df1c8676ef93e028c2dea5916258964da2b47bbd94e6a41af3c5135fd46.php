<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1b319372e09c7a18f708cd7a743680021a0fb10e65a1af6fba9b90deff82d26e extends Twig_Template
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
        $__internal_30717540c01e508ccfb34bbc634a098558127d389a101abc96a21258213784aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30717540c01e508ccfb34bbc634a098558127d389a101abc96a21258213784aa->enter($__internal_30717540c01e508ccfb34bbc634a098558127d389a101abc96a21258213784aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4923e3573fefc9baafc0cf004f3a98eceb64e7d1b81ebda0d624b63df2148baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4923e3573fefc9baafc0cf004f3a98eceb64e7d1b81ebda0d624b63df2148baf->enter($__internal_4923e3573fefc9baafc0cf004f3a98eceb64e7d1b81ebda0d624b63df2148baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_30717540c01e508ccfb34bbc634a098558127d389a101abc96a21258213784aa->leave($__internal_30717540c01e508ccfb34bbc634a098558127d389a101abc96a21258213784aa_prof);

        
        $__internal_4923e3573fefc9baafc0cf004f3a98eceb64e7d1b81ebda0d624b63df2148baf->leave($__internal_4923e3573fefc9baafc0cf004f3a98eceb64e7d1b81ebda0d624b63df2148baf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
