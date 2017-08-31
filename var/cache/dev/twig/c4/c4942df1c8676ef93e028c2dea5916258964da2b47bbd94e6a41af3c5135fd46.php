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
        $__internal_6f72d36b93ed2fc702312e9f3d1b4848bea3513f580f5f247837c45407a49164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f72d36b93ed2fc702312e9f3d1b4848bea3513f580f5f247837c45407a49164->enter($__internal_6f72d36b93ed2fc702312e9f3d1b4848bea3513f580f5f247837c45407a49164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3bcb8507c1e3259661dc8a08ab3e39e7904506f655d1d3a8a55d6285267060d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcb8507c1e3259661dc8a08ab3e39e7904506f655d1d3a8a55d6285267060d7->enter($__internal_3bcb8507c1e3259661dc8a08ab3e39e7904506f655d1d3a8a55d6285267060d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6f72d36b93ed2fc702312e9f3d1b4848bea3513f580f5f247837c45407a49164->leave($__internal_6f72d36b93ed2fc702312e9f3d1b4848bea3513f580f5f247837c45407a49164_prof);

        
        $__internal_3bcb8507c1e3259661dc8a08ab3e39e7904506f655d1d3a8a55d6285267060d7->leave($__internal_3bcb8507c1e3259661dc8a08ab3e39e7904506f655d1d3a8a55d6285267060d7_prof);

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
